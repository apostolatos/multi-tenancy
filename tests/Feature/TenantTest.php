<?php

use App\Models\Tenant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

it('creates a tenant and switches database', function () {
    // Create a new tenant
    $response = $this->artisan('tenant:create', [
        'name' => 'test_tenant',
        'domain' => 'test_tenant.example.com',
    ]);

    $this->assertEquals(0, $response);

    // Check if tenant database was created
    $tenant = Tenant::where('name', 'test_tenant')->first();
    
    $this->assertNotNull($tenant);

    // Test database switching
    DB::connection('tenant')->setDatabaseName($tenant->database);

    $this->assertEquals($tenant->database, DB::connection('tenant')->getDatabaseName());
});