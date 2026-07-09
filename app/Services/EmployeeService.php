<?php

namespace App\Services;

use App\Models\Employee;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;

class EmployeeService
{
    protected EmployeeRepositoryInterface $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function getAll()
    {
        return $this->employeeRepository->all();
    }

    public function create(array $data): Employee
    {
        return $this->employeeRepository->create($data);
    }

    public function getById(int $id): Employee
    {
        return $this->employeeRepository->find($id);
    }

    public function update(Employee $employee, array $data): Employee
    {
        return $this->employeeRepository->update($employee, $data);
    }

    public function delete(Employee $employee): bool
    {
        return $this->employeeRepository->delete($employee);
    }
}
