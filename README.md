# Laravel Project Installation Guide

Welcome to the Laravel Project! This guide will walk you through the steps required to set up and run the application using Docker. Follow these steps to get the project up and running smoothly.

## Table of Contents

1. [Prerequisites](#prerequisites)
2. [Installation Steps](#installation-steps)
   - [Step 1: Clone the Repository](#step-1-clone-the-repository)
   - [Step 2: Environment Configuration](#step-2-environment-configuration)
   - [Step 3: Docker Setup](#step-3-docker-setup)
   - [Step 4: Database Migration](#step-4-database-migration)
   - [Step 5: Database Seeding](#step-5-database-seeding)
3. [Additional Information](#additional-information)

## Prerequisites

Before you begin, ensure you have the following software installed on your local machine:

- **Docker**: [Download and Install Docker](https://www.docker.com/get-started)
- **Git**: [Download and Install Git](https://git-scm.com/downloads)

## Installation Steps

### Step 1: Clone the Repository

First, you need to clone the project repository to your local machine. Open a terminal and run the following command:

```bash
git clone https://github.com/apostolatos/multi-tenancy.git
```

### Step 2: Clone the Repository

```bash
cd your-repository
```

```bash
cp .env.example .env
```

### Step 3: Docker Setup

Now, we will build and start the Docker containers.
Run the following command to build the Docker images and start the containers in the background:

```bash
docker-compose build
docker-compose up -d
```

### Step 4: Database Migration

With the Docker containers up and running, it's time to migrate the database. Run the following command to execute the migrations:

```bash
docker-compose exec app php artisan migrate
```

### Step 5: Database Seeding

To populate the database with initial data, run the database seeders with the following command:

```bash
docker-compose exec app php artisan db:seed
```

### Step 6: Create demo Tenants

To populate tenants, run the following command:

```bash
php artisan tenant:create tenant1 tenant1.example.com
php artisan tenant:create tenant2 tenant2.example.com
```

# Multitenancy

Multi-tenancy refers to a software architecture where a single instance of an application serves multiple tenants (customers). Each tenant's data is isolated and securely partitioned, allowing them to operate as if they have their own dedicated instance of the application. 

# Application User Guide

Welcome to our application! This README will guide you through the available routes and their functionalities.

## Routes

### Companies

1. **List of Companies**
   - **URL:** `/companies`
   - **Description:** View a list of all companies.
   - **Route Name:** `companies.index`
   - **Usage:** Access this route to see all registered companies.

2. **Create a Company**
   - **URL:** `/companies/create`
   - **Description:** Create a new company.
   - **Route Name:** `companies.create`
   - **Usage:** Use this route to add a new company to the system.

3. **Edit Company Details**
   - **URL:** `/companies/{company}/edit`
   - **Description:** Edit details of a specific company.
   - **Route Name:** `companies.edit`
   - **Usage:** Access this route to modify details (such as name, address, etc.) of a specific company. Replace `{company}` with the ID or slug of the company you wish to edit.

### Users

4. **List of Users**
   - **URL:** `/users`
   - **Description:** View a list of all users.
   - **Route Name:** `users.index`
   - **Usage:** Access this route to see all registered users.

5. **Create a User**
   - **URL:** `/users/create`
   - **Description:** Create a new user.
   - **Route Name:** `users.create`
   - **Usage:** Use this route to add a new user to the system.

### Projects

6. **Edit Project**
   - **URL:** `/projects/{projectId}/edit`
   - **Description:** Edit details of a specific project.
   - **Route Name:** `projects.edit`
   - **Usage:** Access this route to modify details of a specific project identified by `{projectId}`. Replace `{projectId}` with the actual ID or slug of the project you wish to edit.

## Notes

- Ensure you have the necessary permissions to perform actions such as creating or editing entities (companies, users, projects).
- Always replace placeholders like `{company}`, `{projectId}` with actual IDs or slugs when navigating to specific resources.
