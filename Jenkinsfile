pipeline {
    agent {
        docker {
            image 'php:7.4-cli'
            args '-v /var/run/docker.sock:/var/run/docker.sock'
        }
    }
    
    environment {
        DOCKER_IMAGE = 'tampoohoonm/test:${BUILD_NUMBER}'
    }
    
    stages {
        
        stage('Install Dependencies') {
            steps {
                sh 'sudo apt-get update && apt-get install -y zip unzip'
                sh 'sudo curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer'
                sh 'sudo composer install --no-interaction --no-progress --prefer-dist'
            }
        }
        
        
        stage('Build Docker Image') {
            steps {
                script {
                    docker.build(env.DOCKER_IMAGE)
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
