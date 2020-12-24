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
        echo 'Checkout Successful'
      }
    }

    stage('Checking  Folder') {
      steps {
        echo 'Checking Deployment Folder'
        readFile 'deploymentSettings.json'
      }
    }

    stage('Cloning') {
      steps {
        echo 'Cloning into '
        sh 'sudo git clone https://github.com/rohithwap/luxe.git /home/luxeevents/web/luxeevents.in/public_html/blue'
        echo 'Clone complete'
      }
    }

    stage('Success') {
      steps {
        echo 'Deployed Successfully to '
      }
    }

    stage('Cleaning Folder') {
      steps {
        sh 'rm -rf /home/luxeevents/web/luxeevents.in/public_html/blue'
      }
    }

  }
}