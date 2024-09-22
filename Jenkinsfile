pipeline {
    agent any

    stages {

        stage('checkout scm'){
            steps{
                checkout scm
            }
        }
        
        stage('Install Dependencies') {
            steps {
               // sh 'sudo apt-get update && apt-get install -y zip unzip'
                sh 'curl -sS https://getcomposer.org/installer -o composer-setup.php'
                sh 'php composer-setup.php --install-dir=/usr/local/bin --filename=composer'
            }
        }
        
        
        stage('Build Docker Image') {
            steps {
                script {
                    echo "docker stage"
                    //docker.build(env.DOCKER_IMAGE, "-f Dockerfile .")
                }
            }
        }
        
        // stage('Push Docker Image') {
        //     steps {
        //         script {
        //             docker.withRegistry('https://your-docker-registry', 'docker-registry-credentials') {
        //                 docker.image(env.DOCKER_IMAGE).push()
        //             }
        //         }
        //     }
        // }
        
        stage('Deploy') {
            steps {
                // Add your deployment steps here
                // This could involve updating a Kubernetes deployment, running docker-compose, etc.
                echo 'Deploying the application...'
            }
        }
    }
    
    post {
        always {
            cleanWs()
        }
    }
}
