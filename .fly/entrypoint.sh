#!/usr/bin/env sh

# Exit on error
set -e

# Run user scripts, if they exist
if [ -d /var/www/html/.fly/scripts ]; then
  for f in /var/www/html/.fly/scripts/*.sh; do
    echo "Running $f"
    chmod +x "$f"
    "$f"
  done
fi

# Set correct permissions
chown -R www-data:www-data /var/www/html/storage
chown -R www-data:www-data /var/www/html/bootstrap/cache

# Run Laravel setup commands (optional - disable if already built in Dockerfile)
cd /var/www/html

# You can uncomment these if needed:
# php artisan config:cache
# php artisan route:cache
# php artisan view:cache

# Start supervisord (which runs nginx + php-fpm)
exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf