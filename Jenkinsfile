pipeline {
    agent any

    environment {
        DOCKER_REGISTRY = 'sonalisinhawipro'
        APP_NAME = 'laravel-app'
        DOCKER_NETWORK = 'laravel-network'
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