FROM hitalos/laravel:latest

# Create app directory
WORKDIR /src

# Install app dependencies
# A wildcard is used to ensure both package.json AND package-lock.json are copied
# where available (npm@5+)
COPY . .

RUN composer install && \
    npm install --save && \
    npm run dev

# If you are building your code for production
# RUN npm install --only=production
