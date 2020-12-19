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

    stage('Sleep') {
      steps {
        echo 'Sleeping for 30 seconds'
        sleep 30
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
        echo 'Deployed Successfully'
      }
    }

  }
}