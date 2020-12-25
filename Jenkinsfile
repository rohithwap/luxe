pipeline {
  agent {
    node {
      label 'Luxe'
    }

  }
  environment {
    vars = ''
  }
  stages {
    stage('Checkout Branch') {
      steps {
        echo 'Checking Out Branch'
        git(url: 'https://github.com/rohithwap/luxe.git', branch: 'master')
        script {
          vars = readFile('deploymentSettings.txt')
        }        
        echo "Checkout Successful, deployment will be made to ${vars.env_folder}"
      }
    }

    stage('Cleaning') {
      steps {
        sh "sudo rm -rf /home/luxeevents/web/luxeevents.in/public_html/${vars.env_folder}"
      }
    }

    stage('Cloning') {
      steps {
        echo 'Cloning into Blue'
        sh "sudo git clone https://github.com/rohithwap/luxe.git /home/luxeevents/web/luxeevents.in/public_html/${vars.env_folder}"
        echo 'Clone complete'
      }
    }

    stage('Success') {
      steps {
        echo "Deployed Successfully to ${vars.env_folder}"
      }
    }

  }  
}