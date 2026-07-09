<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use App\Services\EmployeeService;
use App\Traits\ApiResponse;

class EmployeeController extends Controller
{
    use ApiResponse;

    protected EmployeeService $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $employees = $this->employeeService->getAll();

        return $this->success($employees, 'Employees retrieved successfully.');
    }

    public function store(StoreEmployeeRequest $request)
    {
        $employee = $this->employeeService->create($request->validated());

        return $this->success($employee, 'Employee created successfully.', 201);
    }

    public function show(Employee $employee)
    {
        return $this->success($employee, 'Employee retrieved successfully.');
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee = $this->employeeService->update(
            $employee,
            $request->validated()
        );

        return $this->success($employee, 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $this->employeeService->delete($employee);

        return $this->success(null, 'Employee deleted successfully.');
    }
}
