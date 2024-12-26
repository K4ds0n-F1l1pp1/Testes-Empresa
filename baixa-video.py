from pytube import Youtube

link =  input("Enter a link para fazer dowload: ")
yt = Youtube(link)

dowloader = yt.streams.get_highest_resolution()
print("Downloading...")

dowloader.download(filename="video_download.mp4")
print("Download completed!")