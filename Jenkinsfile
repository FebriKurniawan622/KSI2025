pipeline {
    agent any

    // Bagian 'tools' dihapus karena tidak wajib untuk PHP sederhana
    
    stages {
        stage('Checkout Code') {
            steps {
                checkout scm
            }
        }
        
        stage('Run PHP Script') {
            steps {
                // Menjalankan perintah PHP
                powershell 'php index.php' 
            }
        }
    }
}