# float-client-php
This API allows 3rd party integration of your Float data.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3.0.0-beta
- Package version: 0.1.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "spinx/float-client-php": "~0.1.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/float-client-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\AccountsApi();

try {
    $result = $api_instance->getAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccounts: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.float.com/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**getAccounts**](docs/Api/AccountsApi.md#getaccounts) | **GET** /accounts | List accounts
*ClientsApi* | [**addClient**](docs/Api/ClientsApi.md#addclient) | **POST** /clients | Add a new client
*ClientsApi* | [**deleteClient**](docs/Api/ClientsApi.md#deleteclient) | **DELETE** /clients/{client_id} | Delete a client
*ClientsApi* | [**getClient**](docs/Api/ClientsApi.md#getclient) | **GET** /clients/{client_id} | Retrieve a single client
*ClientsApi* | [**getClients**](docs/Api/ClientsApi.md#getclients) | **GET** /clients | List clients
*ClientsApi* | [**updateClient**](docs/Api/ClientsApi.md#updateclient) | **PATCH** /clients/{client_id} | Update a client&#39;s name
*DepartmentsApi* | [**addDepartment**](docs/Api/DepartmentsApi.md#adddepartment) | **POST** /departments | Add a new department
*DepartmentsApi* | [**deleteDepartment**](docs/Api/DepartmentsApi.md#deletedepartment) | **DELETE** /departments/{department_id} | Delete a department
*DepartmentsApi* | [**getDepartment**](docs/Api/DepartmentsApi.md#getdepartment) | **GET** /departments/{department_id} | Retrieve a single department
*DepartmentsApi* | [**getDepartments**](docs/Api/DepartmentsApi.md#getdepartments) | **GET** /departments | List departments
*DepartmentsApi* | [**updateDepartment**](docs/Api/DepartmentsApi.md#updatedepartment) | **PATCH** /departments/{department_id} | Update a department&#39;s details
*MilestonesApi* | [**addMilestone**](docs/Api/MilestonesApi.md#addmilestone) | **POST** /milestones | Add a new project milestone
*MilestonesApi* | [**deleteMilestone**](docs/Api/MilestonesApi.md#deletemilestone) | **DELETE** /milestones/{milestone_id} | Delete a milestone
*MilestonesApi* | [**getMilestone**](docs/Api/MilestonesApi.md#getmilestone) | **GET** /milestones/{milestone_id} | Retrieve a single milestone
*MilestonesApi* | [**getMilestones**](docs/Api/MilestonesApi.md#getmilestones) | **GET** /milestones | List project milestones
*MilestonesApi* | [**updateMilestone**](docs/Api/MilestonesApi.md#updatemilestone) | **PATCH** /milestones/{milestone_id} | Update a milestone&#39;s details
*PeopleApi* | [**addPerson**](docs/Api/PeopleApi.md#addperson) | **POST** /people | Add a new person
*PeopleApi* | [**deletePerson**](docs/Api/PeopleApi.md#deleteperson) | **DELETE** /people/{people_id} | Delete a person
*PeopleApi* | [**getPeople**](docs/Api/PeopleApi.md#getpeople) | **GET** /people | List people
*PeopleApi* | [**getPerson**](docs/Api/PeopleApi.md#getperson) | **GET** /people/{people_id} | Retrieve a single person
*PeopleApi* | [**updatePerson**](docs/Api/PeopleApi.md#updateperson) | **PATCH** /people/{people_id} | Update a person&#39;s details
*ProjectsApi* | [**addProject**](docs/Api/ProjectsApi.md#addproject) | **POST** /projects | Add a new project
*ProjectsApi* | [**deleteProject**](docs/Api/ProjectsApi.md#deleteproject) | **DELETE** /projects/{project_id} | Delete a project
*ProjectsApi* | [**getProject**](docs/Api/ProjectsApi.md#getproject) | **GET** /projects/{project_id} | Retrieve a single project.
*ProjectsApi* | [**getProjects**](docs/Api/ProjectsApi.md#getprojects) | **GET** /projects | List projects
*ProjectsApi* | [**updateProject**](docs/Api/ProjectsApi.md#updateproject) | **PATCH** /projects/{project_id} | Update a project&#39;s details
*PublicHolidaysApi* | [**addHoliday**](docs/Api/PublicHolidaysApi.md#addholiday) | **POST** /holidays | Block out times throughout the year when the office is closed
*PublicHolidaysApi* | [**deleteHoliday**](docs/Api/PublicHolidaysApi.md#deleteholiday) | **DELETE** /holidays/{holiday_id} | Delete a holiday
*PublicHolidaysApi* | [**getHoliday**](docs/Api/PublicHolidaysApi.md#getholiday) | **GET** /holidays/{holiday_id} | Retrieve a single holiday
*PublicHolidaysApi* | [**getHolidays**](docs/Api/PublicHolidaysApi.md#getholidays) | **GET** /holidays | List holidays
*PublicHolidaysApi* | [**updateHoliday**](docs/Api/PublicHolidaysApi.md#updateholiday) | **PATCH** /holidays/{holiday_id} | Update a holiday&#39;s details
*TasksApi* | [**addTask**](docs/Api/TasksApi.md#addtask) | **POST** /tasks | Add a new task
*TasksApi* | [**deleteTask**](docs/Api/TasksApi.md#deletetask) | **DELETE** /tasks/{task_id} | Delete a task
*TasksApi* | [**getTask**](docs/Api/TasksApi.md#gettask) | **GET** /tasks/{task_id} | Retrieve a single task
*TasksApi* | [**getTasks**](docs/Api/TasksApi.md#gettasks) | **GET** /tasks | List tasks. This includes any tasks or repeating task sets that start or end within the date range specified.
*TasksApi* | [**updateTask**](docs/Api/TasksApi.md#updatetask) | **PATCH** /tasks/{task_id} | Update a task&#39;s details
*TimeOffApi* | [**addTimeoff**](docs/Api/TimeOffApi.md#addtimeoff) | **POST** /timeoffs | Add a new time off
*TimeOffApi* | [**deleteTimeoff**](docs/Api/TimeOffApi.md#deletetimeoff) | **DELETE** /timeoffs/{timeoff_id} | Delete a time off record
*TimeOffApi* | [**getTimeoff**](docs/Api/TimeOffApi.md#gettimeoff) | **GET** /timeoffs/{timeoff_id} | Retrieve a single time off
*TimeOffApi* | [**getTimeoffs**](docs/Api/TimeOffApi.md#gettimeoffs) | **GET** /timeoffs | List of time off scheduled.
*TimeOffApi* | [**updateTimeoff**](docs/Api/TimeOffApi.md#updatetimeoff) | **PATCH** /timeoffs/{timeoff_id} | Update a time off&#39;s details
*TimeOffTypesApi* | [**addTimeoffType**](docs/Api/TimeOffTypesApi.md#addtimeofftype) | **POST** /timeoff-types | Add a new time off type
*TimeOffTypesApi* | [**getTimeoffType**](docs/Api/TimeOffTypesApi.md#gettimeofftype) | **GET** /timeoff-types/{timeoff_type_id} | Retrieve a single time off type
*TimeOffTypesApi* | [**getTimeoffTypes**](docs/Api/TimeOffTypesApi.md#gettimeofftypes) | **GET** /timeoff-types | List of time off types
*TimeOffTypesApi* | [**updateTimeoffType**](docs/Api/TimeOffTypesApi.md#updatetimeofftype) | **PATCH** /timeoff-types/{timeoff_type_id} | Update a time off type&#39;s details


## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [Client](docs/Model/Client.md)
 - [Department](docs/Model/Department.md)
 - [Holiday](docs/Model/Holiday.md)
 - [Milestone](docs/Model/Milestone.md)
 - [PeopleTag](docs/Model/PeopleTag.md)
 - [Person](docs/Model/Person.md)
 - [Project](docs/Model/Project.md)
 - [ProjectTag](docs/Model/ProjectTag.md)
 - [Task](docs/Model/Task.md)
 - [Timeoff](docs/Model/Timeoff.md)
 - [TimeoffType](docs/Model/TimeoffType.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Generate by:

```
swagger-codegen generate -i http://dev.float.com/swagger-api-v3.yaml -l php -o . -c swagger-config.json
```



