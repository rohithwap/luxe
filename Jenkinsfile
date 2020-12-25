pipeline {
  agent {
    node {
      label 'Luxe'
    }

  }
  stages {
    stage('Checkout Branch') {
      steps {
        echo 'Checking Out Branch'
        git(url: 'https://github.com/rohithwap/luxe.git', branch: 'master')
        sh '''ls
        . ./deploymentSettings.txt
        echo $env_folder
        ${env.env_folder} = $env_folder
echo $env'''
        echo 'Checkout Successful, deployment is currently set to ${env.env_folder}'
      }
    }

    stage('Cleaning') {
      steps {
        sh 'sudo rm -rf /home/luxeevents/web/luxeevents.in/public_html/blue'
      }
    }

    stage('Cloning') {
      steps {
        echo 'Cloning into Blue'
        sh 'sudo git clone https://github.com/rohithwap/luxe.git /home/luxeevents/web/luxeevents.in/public_html/blue'
        echo 'Clone complete'
      }
    }

    stage('Success') {
      steps {
        echo 'Deployed Successfully to Blue'
      }
    }

  }
  environment {
    env_folder = ''
  }
}