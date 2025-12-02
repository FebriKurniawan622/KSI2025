pipeline {
    agent any

    stages {
        // Stage 1: Mengambil kode dari GitHub (Membaca kode)
        stage('Checkout Code') {
            steps {
                // Perintah ini otomatis menarik kode terbaru dari repo Anda
                checkout scm
            }
        }

        // Stage 2: Menjalankan Script PHP (Sesuai Tugas 2)
        stage('Run PHP Script') {
            steps {
                // Menjalankan perintah powershell sesuai instruksi soal
                powershell 'php index.php'
            }
        }
    }
}