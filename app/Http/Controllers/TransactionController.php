<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function receipt(Request $request)
    {

        $loginUserId = Auth::id();

        $transaction = Transaction::where('referenceId', $request->referenceId)
            ->where('user_id', $loginUserId)
            ->first();

        if (! $transaction) {
            abort(404);
        }

        return view('user.receipt', ['transaction' => $transaction]);
    }
    public function receiptAdmin(Request $request)
    {

        $transaction = Transaction::where('referenceId', $request->referenceId)->first();

        if (! $transaction) {
            abort(404);
        }

        return view('user.receipt', ['transaction' => $transaction]);
    }

    public function userTransactions(Request $request)
    {
        $user = Auth::user();

        $query = Transaction::where('user_id', $user->id);

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('referenceId', 'like', "%{$search}%")
                    ->orWhere('service_type', 'like', "%{$search}%")
                    ->orWhere('service_description', 'like', "%{$search}%")
                    ->orWhere('status', 'like', "%{$search}%");
            });
        }

        $transactions = $query->latest()->paginate(10)->withQueryString();

        $todayCredit = Transaction::where('user_id', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->where(function ($q) {
                $q->where('type', 'credit')
                    ->orWhere('service_type', 'like', '%topup%')
                    ->orWhere('service_type', 'like', '%credit%')
                    ->orWhere('service_description', 'like', '%credited%')
                    ->orWhere('service_description', 'like', '%wallet has been credited%');
            })
            ->where('status', 'Approved')
            ->sum('amount');

        $todayDebit = Transaction::where('user_id', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->where(function ($q) {
                $q->where('type', 'debit')
                    ->orWhere('service_type', 'like', '%debit%')
                    ->orWhere('service_description', 'like', '%debit%')
                    ->orWhere('service_description', 'like', '%purchase%');
            })
            ->where('status', 'Approved')
            ->sum('amount');

        $todayRefund = Transaction::where('user_id', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->where(function ($q) {
                $q->where('service_type', 'like', '%refund%')
                    ->orWhere('service_description', 'like', '%refund%')
                    ->orWhere('service_description', 'like', '%refunded%');
            })
            ->sum('amount');

        $todayBonus = Transaction::where('user_id', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->where(function ($q) {
                $q->where('service_type', 'like', '%bonus%')
                    ->orWhere('service_description', 'like', '%bonus%');
            })
            ->sum('amount');

        return view('user.transactions', compact(
            'transactions',
            'todayCredit',
            'todayDebit',
            'todayRefund',
            'todayBonus'
        ));
    }

    public function transactions(Request $request)
    {

        $query = Transaction::query();

        if ($search = $request->input('search')) {
            $query->where('referenceId', 'like', "%{$search}%")
                ->orWhere('service_type', 'like', "%{$search}%")
                ->orWhere('service_description', 'like', "%{$search}%")
                ->orWhere('status', 'like', "%{$search}%");
        }

        $transactions = $query->latest()->paginate(20)->withQueryString();

        $todayCredit = Transaction::whereDate('created_at', Carbon::today())
            ->where(function ($q) {
                $q->where('type', 'credit')
                    ->orWhere('service_type', 'like', '%topup%')
                    ->orWhere('service_type', 'like', '%credit%')
                    ->orWhere('service_description', 'like', '%credited%')
                    ->orWhere('service_description', 'like', '%wallet has been credited%');
            })
            ->where('status', 'Approved')
            ->sum('amount');

        $todayDebit = Transaction::whereDate('created_at', Carbon::today())
            ->where(function ($q) {
                $q->where('type', 'debit')
                    ->orWhere('service_type', 'like', '%debit%')
                    ->orWhere('service_description', 'like', '%debit%')
                    ->orWhere('service_description', 'like', '%purchase%');
            })
            ->where('status', 'Approved')
            ->sum('amount');

        $todayRefund = Transaction::whereDate('created_at', Carbon::today())
            ->where(function ($q) {
                $q->where('service_type', 'like', '%refund%')
                    ->orWhere('service_description', 'like', '%refund%')
                    ->orWhere('service_description', 'like', '%refunded%');
            })
            ->sum('amount');

        $todayBonus = Transaction::whereDate('created_at', Carbon::today())
            ->where(function ($q) {
                $q->where('service_type', 'like', '%bonus%')
                    ->orWhere('service_description', 'like', '%bonus%');
            })
            ->sum('amount');

        return view('admin.transactions', compact('transactions', 'todayCredit', 'todayDebit', 'todayRefund', 'todayBonus'));
    }
}
