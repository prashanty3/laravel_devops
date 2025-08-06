pipeline {
    agent any

    environment {
        COMPOSER_ALLOW_SUPERUSER = "1"
    }

    stages {

        stage('Checkout') {
            steps {
                git url: 'https://github.com/prashanty3/laravel_devops.git', branch: 'main'
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

        stage('Install Composer Dependencies') {
            steps {
                sh 'docker-compose exec -T app composer install'
            }
        }

        stage('Install NPM Dependencies') {
            steps {
                sh 'docker-compose exec -T app npm install'
                sh 'docker-compose exec -T app npm run build'
            }
        }

        stage('Run Migrations & Seeders') {
            steps {
                sh 'docker-compose exec -T app php artisan migrate --seed'
            }
        }

        stage('Laravel Ready') {
            steps {
                echo 'Laravel app is up and running!'
            }
        }
    }

    post {
        always {
            echo 'Pipeline finished.'
        }
        failure {
            echo 'Pipeline failed.'
        }
    }
}
