<?php

namespace App\Repositories\Interfaces;

use App\Models\Employee;

interface EmployeeRepositoryInterface
{
    public function all();

    public function create(array $data): Employee;

    public function find(int $id): Employee;

    public function update(Employee $employee, array $data): Employee;

    public function delete(Employee $employee): bool;
}
