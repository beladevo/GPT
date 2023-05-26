#!/bin/bash

# Move to the deployment path
cd /home/banzirco/gpt.banzir.com

# Fetch the latest changes from the Git repository
git fetch origin
git reset --hard origin/master

# Additional deployment steps if required
# For example, installing dependencies, compiling assets, etc.

# Restart services or clear cache if necessary
# For example, restarting Apache or clearing Laravel cache

# Provide necessary permissions to files or folders
# For example, chmod or chown commands if required

# Display a deployment success message
echo "Deployment completed successfully."