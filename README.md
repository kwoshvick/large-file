
## Laravel App

### Setup Instruction
- [Install docker](https://docs.docker.com/engine/install/)
- [Install docker compose](https://docs.docker.com/compose/install/)
- Clone the project
- Insider the project folder run:
- Build containers
    - `docker-compose build`
- Run the containers
    - `docker-compose up -d `
- run migration
    - `docker exec large_file_backend_app php artisan migrate`
- run queue worker
    - `docker exec large_file_backend_app php artisan queue:work`

- Access the application via `{ip}:8010`
