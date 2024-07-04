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

