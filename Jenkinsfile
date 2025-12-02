pipeline {
    agent any

    stages {
        
        stage('Checkout Code') {
            steps {
                
                checkout scm
            }
        }

        
        stage('Run PHP Script') {
            steps {
                
                powershell 'php index.php'
            }
        }
    }
}