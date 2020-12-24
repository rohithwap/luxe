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
        git(url: 'https://github.com/rohithwap/luxe.git', branch: 'master', readFile: ('https://github.com/rohithwap/luxe/blob/master/deploymentSettings.groovy').each {key -> echo key })
        echo 'Checkout Successful'
      }
    }

    stage('Checking  Folder') {
      steps {
        echo 'Checking Deployment Folder'        
        echo 'Folder to deploy is:'
        echo "${env.folder}"   
      }
    }

    stage('Cleaning Folder') {
      steps {
        sh 'sudo rm -rf /home/luxeevents/web/luxeevents.in/public_html/blue'
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
    
  }
}