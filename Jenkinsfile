node {
  checkout scm
  stage('Package') {
      sh 'echo $PATH'

  }
    stage("composer_install") {
        sh 'composer install'
    }


    stage("php test b") {
        sh 'chmod 777 vendor/bin/behat'
    }

    stage("buid success!") {
        sh 'vendor/bin/behat'
    }
}
