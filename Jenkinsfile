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
        script{
          def folderData = readFileFromWorkspace('deploymentSettings.json')
          def folder = folderData.folder
        }       
      }
    }

    stage('Cloning') {
      steps {
        echo 'Cloning into ' +folderData.folder
        sh 'sudo git clone https://github.com/rohithwap/luxe.git /home/luxeevents/web/luxeevents.in/public_html/'+ folder
        echo 'Clone complete'
      }
    }

    stage('Success') {
      steps {
        echo 'Deployed Successfully to ' +folder
      }
    }

  }
}