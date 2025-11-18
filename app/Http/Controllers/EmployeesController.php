<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class EmployeesController extends Controller
{
    public function index(){
      // return DB::table('employees')->get();      // return a collection of array
      // return DB::table('employees')->find(3);    // return a single record using the primary key field is id
      // return DB::table('employees')->first();    // return the first record

      // return DB::table('employees')->where('id', '=', '2')->get();
      // return DB::table('employees')->where('id', '2')->get();
      // return DB::table('employees')->where('id',">",'2')->get();
      // return DB::table('employees')->where('id',">",'2')->where('id','<','5')->get();
      // return DB::table('employees')->orderBy('last_name')->get();

      // DB::table('employees')->insert([
      //   'first_name' => 'KC1',
      //   'last_name' => 'Salvador',
      //   'email' => 'kc1.salvador@example.com',
      //   'phone' => '09171234567',
      //   'position' => 'Software\r\nEngineer',
      //   'department' => 'IT',
      //   'salary' => '32000.00',
      //   'status' => 'active',
      //   'hire_date' => date('Y-m-d')
      // ]);
      // dd('success insert');

      // DB::table('employees')->where('id', 54)->update([
      //   'first_name' => 'Bronny',
      //   'last_name' => 'Salvador',
      //   'email' => 'kc1.salvador@example.com',
      //   'phone' => '09171234567',
      //   'position' => 'Software\r\nEngineer',
      //   'department' => 'IT',
      //   'salary' => '32000.00',
      //   'status' => 'active',
      //   'hire_date' => date('Y-m-d')
      // ]);
      // dd('success update');

      // DB::table('employees')->where('id', 54)->delete();
      // dd('success delete');

      // DB::table('employees')->join('jobs', 'employees.department', '=', 'jobs.id')->get();
      return DB::table('employees')
        ->join('jobs', 'employees.department', '=', 'jobs.id')
        ->select('employees.*', 'jobs.queue', 'jobs.payload')
        ->get();

      // return DB::table('employees')->pluck('first_name', 'id');
      // return DB::table('employees')->get();






      // $now = Carbon::now()->timestamp;
      // DB::table('jobs')->insert([
      //   [
      //     'queue' => 'default',
      //     'payload' => json_encode(['displayName' => 'TestJob1']),
      //     'attempts' => 0,
      //     'reserved_at' => null,
      //     'available_at' => $now,
      //     'created_at' => $now,
      //   ],
      //   [
      //     'queue' => 'default',
      //     'payload' => json_encode(['displayName' => 'TestJob2']),
      //     'attempts' => 0,
      //     'reserved_at' => null,
      //     'available_at' => $now,
      //     'created_at' => $now,
      //   ],
      //   [
      //     'queue' => 'default',
      //     'payload' => json_encode(['displayName' => 'TestJob3']),
      //     'attempts' => 0,
      //     'reserved_at' => null,
      //     'available_at' => $now,
      //     'created_at' => $now,
      //   ],
      //   [
      //     'queue' => 'default',
      //     'payload' => json_encode(['displayName' => 'TestJob4']),
      //     'attempts' => 0,
      //     'reserved_at' => null,
      //     'available_at' => $now,
      //     'created_at' => $now,
      //   ],
      //   [
      //     'queue' => 'default',
      //     'payload' => json_encode(['displayName' => 'TestJob5']),
      //     'attempts' => 0,
      //     'reserved_at' => null,
      //     'available_at' => $now,
      //     'created_at' => $now,
      //   ],
      // ]);
    }
}
