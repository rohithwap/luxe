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
load \'deploymentSettings.groovy\'
'''
        echo 'Checkout Successful'
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
}