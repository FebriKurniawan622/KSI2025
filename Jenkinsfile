pipeline {
    agent any

    stages {
        stage('Checkout Code') {
            steps {
                checkout scm
            }
        }

        stage('Install Dependencies') {
            steps {
                
                powershell 'composer install'
            }
        }

        stage('Run PHP Script') {
            steps {
                
                powershell 'php index.php'
            }
        }

        stage('Unit Test') {
            steps {
                
                powershell 'vendor/bin/phpunit tests --log-junit test-result.xml'
            }
        }
    }

    post {
        always {
    
            junit 'test-result.xml'
        }
    }
}