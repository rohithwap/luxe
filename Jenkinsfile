pipeline {
  agent {
    node {
      label 'Luxe'
    }

  }
  stages {
    stage('Checkout Branch') {
      steps {
        git(url: 'https://github.com/rohithwap/luxe.git', branch: 'master')
      }
    }

    stage('Sleep') {
      steps {
        sleep 30
      }
    }

    stage('Success') {
      steps {
        echo 'Deployed Successfully'
      }
    }

  }
}