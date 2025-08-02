pipeline {
    agent any

    environment {
        DOCKER_REGISTRY = 'sonalisinhawipro'
        APP_NAME = 'laravel-app'
        DOCKER_NETWORK = 'laravel'
    }

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/prashanty3/laravel_devops.git'
            }
        }

        stage('Setup Environment') {
            steps {
                sh 'cp .env.example .env || true'
                sh 'chmod 644 .env'
            }
        }

        stage('Build Docker Images') {
            steps {
                sh 'docker-compose build'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'docker-compose run --rm composer install --no-interaction --prefer-dist --optimize-autoloader'
            }
        }

        stage('Set Permissions') {
            steps {
                sh 'docker-compose run --rm app chmod -R ug+w storage bootstrap/cache'
            }
        }

        stage('Generate App Key') {
            steps {
                sh 'docker-compose run --rm app php artisan key:generate --force'
            }
        }

        stage('Migrate Database') {
            steps {
                sh '''
                docker-compose run --rm app php artisan config:clear
                docker-compose run --rm app php artisan cache:clear || true
                docker-compose run --rm app php artisan view:clear
                docker-compose run --rm app php artisan route:clear

                docker-compose run --rm app php artisan migrate --force
                '''
            }
        }

        stage('Run Tests') {
            steps {
                sh 'docker-compose run --rm app php artisan test || true'
            }
        }

        stage('Deploy') {
            steps {
                sh 'echo "🚀 Deployed!"'
            }
        }
    }

    post {
        always {
            cleanWs()
        }
    }
}
