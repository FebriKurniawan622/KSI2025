pipeline {
    agent any

    tools {
        // Make sure 'jdk-21' matches the name you configured in Jenkins Global Tool Configuration
        jdk 'jdk-21' 
    }

    stages {
        stage('Build') {
            steps {
                echo 'Building...'
                // Add your build command here, e.g., sh './mvnw clean package'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing...'
            }
        }
    }
}