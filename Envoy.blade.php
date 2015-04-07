@servers(['production' => 'forge@hackmemphis.com'])

@task('deploy:production', ['on' => 'production'])
cd /home/forge/hackmemphis.com

/home/forge/hackmemphis.com/deploy.sh

@endtask
