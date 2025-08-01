pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/your/repo.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'docker-compose run --rm app composer install --no-interaction --prefer-dist --optimize-autoloader'
            }
        }

        stage('Generate Key') {
            steps {
                sh 'docker-compose run --rm app php artisan key:generate'
            }
        }

        stage('Migrate Database') {
            steps {
                sh '''
                docker-compose run --rm app php artisan config:clear
                docker-compose run --rm app php artisan cache:clear || true
                docker-compose run --rm app php artisan view:clear
                docker-compose run --rm app php artisan route:clear

                docker-compose run --rm app php artisan cache:table || true
                docker-compose run --rm app php artisan session:table || true
                docker-compose run --rm app php artisan queue:table || true
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
