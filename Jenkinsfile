node {
  checkout scm
  stage('Package') {
      sh 'echo $PATH'

  }
    stage("composer_install") {
        sh 'composer install'
    }


    stage("php test b") {
        sh 'chmod 777 /PATH_TO_BEHAT/bin/behat'
        sh 'vendor/bin/behat'
    }

    stage("buid success!") {
        sh 'Tewst behat success !'
    }
}
