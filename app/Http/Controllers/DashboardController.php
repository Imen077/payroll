<?php

namespace App\Http\Controllers;

use App\Models\Employee;      // Perbaikan namespace
use App\Models\Payroll;       // Perbaikan namespace
use App\Models\Approval;      // Tambahkan model Approval jika belum ada
use Illuminate\Http\Request;
use Illuminate\View\View;     // Untuk type-hint return view

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalEmployees = Employee::count();                          // Hitung total pegawai
        $payrollProcessed = Payroll::where('status', 'processed')->count();  // Hitung payroll processed
        $pendingApprovals = Approval::where('status', 'pending')->count();   // Hitung approvals pending

        return view('dashboard', compact('totalEmployees', 'payrollProcessed', 'pendingApprovals'));
    }
}