pipeline {
  agent any

  environment {
    PROJECT_DIR = 'laravel'
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

    stage('Run Migrations & Seeders') {
      steps {
        sh 'docker-compose run --rm app php artisan migrate --force'
        sh 'docker-compose run --rm app php artisan db:seed --class=SiteContentSeeder'
      }
    }

    stage('Start Laravel Server') {
      steps {
        sh 'docker-compose up -d'
      }
    }
  }

  post {
    always {
      echo 'Pipeline finished.'
    }
  }
}
