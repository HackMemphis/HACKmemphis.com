@servers(['production' => 'forge@hackmemphis.com'])

@task('deploy:production', ['on' => 'production'])
cd hackmemphis.com

deploy.sh

@endtask
