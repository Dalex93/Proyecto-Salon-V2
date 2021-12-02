<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\CreateEmployee;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeController extends Controller
{
    public function index()
    {
        $empleados = EmployeeResource::collection(  Employee::all() );

        return response($empleados, Response::HTTP_OK);
    }

    public function store(CreateEmployee $request)
    {
        $servicio = Employee::create([
            'first_name'    => $request->input('nombre'),
            'last_name'     => $request->input('apellido'),
            'salary'        => $request->input('salario'),
            'position_job'  => $request->input('trabajo')
        ]);

        return (new EmployeeResource($servicio))->additional([
            'mensaje' => 'Empleado agregado exitosamente' 
        ]);
    }

    public function show(Employee $employee)
    {
        $empleado = new EmployeeResource($employee);
        return response($empleado, Response::HTTP_OK);
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update([
            'first_name'    => $request->input('nombre', $employee->first_name),
            'last_name'     => $request->input('apellido', $employee->last_name),
            'salary'        => $request->input('salario', $employee->salary),
            'position_job'  => $request->input('trabajo', $employee->postion_job)
        ]);
        
        return (new EmployeeResource($employee))->additional([
            'mensaje' => 'El empleado ' . $employee->first_name . ' ha sido actualizado' 
        ]);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete(); 

        return (new EmployeeResource($employee))->additional([
            'mensaje' => 'El empleado ' . $employee->first_name . ' ha sido eliminado' 
        ]);
    }
}
