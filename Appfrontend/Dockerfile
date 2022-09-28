FROM node:alpine

WORKDIR /app/Appfrontend

COPY package*.json ./

RUN  npm install
EXPOSE 8080
CMD ["npm", "run", "serve"]
#ENV PORT=8000
#RUN /entrypoint.sh

