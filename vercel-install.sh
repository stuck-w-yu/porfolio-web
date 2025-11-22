#!/usr/bin/env bash
set -euo pipefail

# vercel-install.sh
# Download composer.phar and run composer install in a CI-friendly, non-interactive way.
# This script is intended to be called from vercel.json as the installCommand.

echo "[vercel-install] Starting Composer setup..."

# If composer is already available, use it directly
if command -v composer >/dev/null 2>&1; then
  echo "[vercel-install] Found system composer, using it."
  composer install --no-interaction --prefer-dist --no-dev --no-scripts
  echo "[vercel-install] Composer install finished."
  exit 0
fi

# Download the Composer installer and install to /tmp/composer.phar
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --install-dir=/tmp --filename=composer.phar
rm composer-setup.php

# Run composer install non-interactively
echo "[vercel-install] Running php /tmp/composer.phar install ..."
php /tmp/composer.phar install --no-interaction --prefer-dist --no-dev --no-scripts

echo "[vercel-install] Composer install completed."

# Keep exit code 0
exit 0
