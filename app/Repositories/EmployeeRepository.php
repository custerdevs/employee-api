<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function all()
    {
        return Employee::all();
    }

    public function create(array $data): Employee
    {
        return Employee::create($data);
    }

    public function find(int $id): Employee
    {
        return Employee::findOrFail($id);
    }

    public function update(Employee $employee, array $data): Employee
    {
        $employee->update($data);

        return $employee;
    }

    public function delete(Employee $employee): bool
    {
        return $employee->delete();
    }
}
