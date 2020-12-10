#OS
FROM debian:buster

# Execute install script
COPY srcs /srcs
RUN bash /srcs/s_install.sh

# Execute setup script
RUN bash /srcs/s_setup.sh

# Execute service start script
ENTRYPOINT bash /srcs/s_start.sh

CMD tail -f /dev/null
