@servers(['prod' => 'forge@hackmemphis.com'])

@task('deploy:prod', ['on' => 'prod'])
cd /home/forge/hackmemphis.com
./deploy.sh
@endtask
