pipeline {
    agent any

    environment {
        APP_ENV = 'local'
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

        stage('Start Docker Containers') {
            steps {
                sh 'docker-compose up -d'
            }
        }

        stage('Wait for Services to Start') {
            steps {
                sh 'sleep 10'
            }
        }

        stage('Install Composer Dependencies') {
            steps {
                sh 'docker-compose exec -T app composer install'
            }
        }

        stage('Install NPM Dependencies') {
            steps {
                sh 'docker-compose exec -T app npm install'
            }
        }

        stage('Run Migrations & Seeders') {
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
