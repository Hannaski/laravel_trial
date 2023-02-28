@include('partials.header', ['title' => 'Employee '])
<?php $array = array('title' => 'Employee System') ;?>



<x-nav :data="$array"/>
<x-message />

<header class="max-w-lg mx-auto mt-5">
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center m-5">Employee List</h1>
    </a>
</header>
<section class="overflow-x-auto relative">
    <table class="w-96 mx-auto text-sm text-left text-gray-500">
        <thead class="text-xs text gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6">
                    First Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Last Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Age
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empl as $employee)
            <tr class="bg-gray-700 border-b text-white">
                <td class="py-4 px-6">
                    {{ $employee->first_name}}
                </td>
                <td class="py-4 px-6">
                    {{ $employee->last_name}}
                </td>
                <td class="py-4 px-6">
                    {{ $employee->age}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

    {{-- <ul class="">
        @foreach ($empl as $employee)
           <li> {{ $employee->first_name}} {{ $employee->last_name}} {{ $employee->age}}</li>
            
        @endforeach
    </ul> --}}

@include('partials.footer')