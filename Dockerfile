FROM hitalos/laravel:latest

# Create app directory
WORKDIR /src

# Install app dependencies
# A wildcard is used to ensure both package.json AND package-lock.json are copied
# where available (npm@5+)
COPY . .

RUN composer install
RUN npm install --save
RUN npm run dev
RUN php artisan migrate:refresh --force
RUN php artisan db:seed --force

# If you are building your code for production
# RUN npm install --only=production
