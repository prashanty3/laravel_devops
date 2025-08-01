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

        stage('Build Docker Image') {
            steps {
                script {
                    docker.build("${DOCKER_REGISTRY}/${APP_NAME}:${env.BUILD_ID}")
                }
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'docker-compose run --rm composer install'
            }
        }

        stage('Migrate Database') {
            steps {
                sh '''
                docker-compose run --rm app php artisan config:clear
                docker-compose run --rm app php artisan cache:clear
                docker-compose run --rm app php artisan view:clear
                docker-compose run --rm app php artisan route:clear
                docker-compose run --rm app php artisan migrate --force
                '''
            }
        }

        stage('Run Tests') {
            steps {
                sh 'docker-compose run --rm app php artisan test'
            }
        }

        stage('Deploy') {
            steps {
                sh '''
                docker-compose down
                docker-compose up -d
                '''
            }
        }
    }

    post {
        always {
            cleanWs()
        }
    }
}
