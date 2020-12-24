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

    stage('Checking Deployment Folder') {
      steps {  
        def folderData = readFile 'deploymentSettings.json'
        echo 'Checking Deployment Folder'            
      }
    }

    stage('Cloning') {
      steps {
        echo 'Cloning into ' +folderData.folder
        sh 'sudo git clone https://github.com/rohithwap/luxe.git /home/luxeevents/web/luxeevents.in/public_html/'+ folderData.folder
        echo 'Clone complete'
      }
    }

    stage('Success') {
      steps {
        echo 'Deployed Successfully to ' +folderData.folder
      }
    }

  }
}