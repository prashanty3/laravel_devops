pipeline {
    agent any

    environment {
        COMPOSE_FILE = 'docker-compose.yml'
    }

    stages {
        stage('Clone Repository') {
            steps {
                   git branch: 'main', url: 'https://github.com/prashanty3/laravel_devops.git'
            }
        }

        stage('Build Docker Containers') {
            steps {
                sh 'docker-compose build'
            }
        }

        stage('Start Containers') {
            steps {
                sh 'docker-compose up -d'
            }
        }

        stage('Setup .env File') {
            steps {
                // Copy .env.example to .env inside the app container
                sh 'docker-compose exec -T app cp .env.example .env'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'docker-compose exec -T app composer install'
            }
        }

        stage('Generate Key') {
            steps {
                sh 'docker-compose exec -T app php artisan key:generate'
            }
        }

        stage('Run Migrations & Seed') {
            steps {
                sh 'docker-compose exec -T app php artisan migrate --seed --force'
            }
        }

        stage('Laravel Ready') {
            steps {
                echo 'Laravel App is ready and running!'
            }
        }
    }

    post {
        success {
            echo 'Pipeline completed successfully.'
        }
        failure {
            echo 'Pipeline failed.'
        }
    }
}
