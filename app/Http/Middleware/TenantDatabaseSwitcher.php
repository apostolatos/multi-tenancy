<?php

namespace App\Http\Middleware;

use Closure;
use Spatie\Multitenancy\Models\Tenant;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TenantDatabaseSwitcher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $tenant = Tenant::current();
        
        if ($tenant) {
            config()->set('database.connections.tenant.database', $tenant->database);
            DB::connection('tenant')->reconnect();
        }

        return $next($request);
    }
}
