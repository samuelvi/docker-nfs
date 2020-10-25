NfS For MacOSX Catalina:

For demo purposes, it's recommended to place the project into a folder inside your home directory called Sites/docker_nfs.

If you wish it to be stored in Desktop or Documents, you must set permissions on your Mac.

The Users folder is /System/Volumes/Data/Users for MacOsX Catalina, /Users for previous versions.
pleaseAdjustTheScriptSetupNativeNfsDockerOsxShIfYourSystemVersioisPriorToCatalina.

Step by step set up and run:

- run: bash ./scripts/setup_native_nfs_docker_osx.sh
- run: bash ./scripts/build.sh
- run: bash ./scripts/up.sh
- access http://localhost

Notes:

* setup_native_nfs_docker_osx.sh: https://github.com/pascalandy/Docker-For-Mac-with-Native-NFS/blob/master/setup_native_nfs_docker_osx.sh
