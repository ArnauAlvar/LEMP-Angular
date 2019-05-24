FROM node:latest as node
WORKDIR /app
RUN npm install
COPY ./ /app/
ARG configuration=production
#RUN npm run build -- --prod --configuration=$configuration
RUN npm run build -- --output-path=./dist/helloworld --configuration $configuration

# Stage 1, based on Nginx, to have only the compiled app, ready for production with Nginx
FROM nginx:alpine
COPY --from=node /app/dist/helloworld/ /home/arnau/lemp/website/public_html
