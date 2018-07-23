node {
  checkout scm
  stage('Package') {
      sh 'echo $PATH'

  }
    stage("composer_install") {
        sh 'composer install'
    }


    stage("php test b") {
        sh 'vendor/bin/behat'
    }

    stage("buid success!") {
        sh 'Tewst behat success !'
    }
}
